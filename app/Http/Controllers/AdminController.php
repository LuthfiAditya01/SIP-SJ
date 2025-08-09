<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DataBalita;
use App\Models\DataPerkembanganBalita;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    /**
     * Display admin dashboard with statistics.
     */
    public function index()
    {
        // Get statistics
        $totalBalita = DataBalita::count();
        $totalUsers = User::count();
        $balitaStunting = DataBalita::where('is_stunting', 'Stunting')->count();
        $balitaPerluPerhatian = DataBalita::where('is_stunting', 'Perlu Perhatian')->count();
        $balitaSehat = DataBalita::where('is_stunting', 'Sehat')->count();
        $balitaPerluDiverifikasi = DataBalita::where('is_stunting', 'Perlu Diverifikasi')->count();

        // Data for charts
        $lingkunganData = [];
        for ($i = 1; $i <= 5; $i++) {
            $lingkunganData[] = DataBalita::where('lingkungan', $i)->count();
        }

        $stuntingData = [
            $balitaSehat,
            $balitaPerluPerhatian,
            $balitaStunting,
            $balitaPerluDiverifikasi
        ];

        // Recent activities (last 10 activities)
        $recentActivities = [
            [
                'action' => 'Data Balita Ditambahkan',
                'description' => 'Balita baru ditambahkan ke Lingkungan 1',
                'time' => '2 jam yang lalu'
            ],
            [
                'action' => 'Pengguna Baru',
                'description' => 'Kader baru didaftarkan untuk Lingkungan 3',
                'time' => '5 jam yang lalu'
            ],
            [
                'action' => 'Data Perkembangan',
                'description' => 'Data perkembangan balita diperbarui',
                'time' => '1 hari yang lalu'
            ]
        ];

        return view('admin.dashboard', compact(
            'totalBalita',
            'totalUsers', 
            'balitaStunting',
            'balitaPerluPerhatian',
            'balitaSehat',
            'balitaPerluDiverifikasi',
            'lingkunganData',
            'stuntingData',
            'recentActivities'
        ));
    }

    /**
     * Display users management page.
     */
    public function users()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.users', compact('users'));
    }

    /**
     * Show form to create new user.
     */
    public function createUser()
    {
        return view('admin.create-user');
    }

    /**
     * Store new user.
     */
    public function storeUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:kader,bidan',
            'lingkungan' => 'required_if:role,kader|nullable|in:1,2,3,4,5'
        ], [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'role.required' => 'Role harus dipilih.',
            'lingkungan.required_if' => 'Lingkungan harus diisi untuk role kader.'
        ]);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role'],
            'lingkungan' => $validatedData['role'] === 'kader' ? $validatedData['lingkungan'] : null,
            'is_verified' => true, // Set default validation status
        ]);

        return redirect()->route('admin.users')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    /**
     * Show form to edit user.
     */
    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit-user', compact('user'));
    }

    /**
     * Update user.
     */
    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'role' => 'required|in:kader,bidan,admin',
            'lingkungan' => 'required_if:role,kader|nullable|in:1,2,3,4,5'
        ]);

        $updateData = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'role' => $validatedData['role'],
            'lingkungan' => $validatedData['role'] === 'kader' ? $validatedData['lingkungan'] : null,
        ];

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'string|min:8|confirmed'
            ]);
            $updateData['password'] = Hash::make($request->password);
        }

        $user->update($updateData);

        return redirect()->route('admin.users')->with('success', 'Pengguna berhasil diperbarui.');
    }

    /**
     * Delete user.
     */
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users')->with('success', 'Pengguna berhasil dihapus.');
    }

    /**
     * Display all balita data.
     */
    public function balita()
    {
        $balita = DataBalita::with('perkembangan')->orderBy('created_at', 'desc')->get();
        return view('admin.balita', compact('balita'));
    }

    /**
     * Show balita details.
     */
    public function balitaDetail($id)
    {
        $balita = DataBalita::findOrFail($id);
        $perkembangan = DataPerkembanganBalita::where('id_balita', $id)
            ->orderBy('tanggal_penimbangan', 'desc')
            ->get();
        
        return view('admin.balita-detail', compact('balita', 'perkembangan'));
    }

    /**
     * Display reports page.
     */
    public function reports()
    {
        // Generate various reports
        $reportData = [
            'totalBalita' => DataBalita::count(),
            'balitaPerLingkungan' => DB::table('data_balita')
                ->select('lingkungan', DB::raw('count(*) as total'))
                ->groupBy('lingkungan')
                ->get(),
            'statusStunting' => DB::table('data_balita')
                ->select('is_stunting', DB::raw('count(*) as total'))
                ->groupBy('is_stunting')
                ->get(),
            'dataPerBulan' => DB::table('data_balita')
                ->select(DB::raw('MONTH(created_at) as bulan'), DB::raw('count(*) as total'))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw('MONTH(created_at)'))
                ->get()
        ];

        return view('admin.reports', compact('reportData'));
    }

    /**
     * Display settings page.
     */
    public function settings()
    {
        return view('admin.settings');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
