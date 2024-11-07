@extends('base')

@section('title', 'Dashboard')

@section('content')
    <div class="dashboard-container">
        <h1>Welcome, {{ Auth::user()->name }}!</h1>
        <p>This is your dashboard where you can manage your account and view your content.</p>
        
        <!-- Add dashboard content here, like user stats, recent activities, etc. -->
        <div class="dashboard-content">
            <div class="card">
                <h3>Profile</h3>
                <p>View and update your profile details here.</p>
                <a href="" class="button">Edit Profile</a>
            </div>

            <div class="card">
                <h3>Settings</h3>
                <p>Manage your account settings and preferences.</p>
                <a href="" class="button">Go to Settings</a>
            </div>

            <div class="card">
                <h3>Logout</h3>
                <p>Sign out of your account securely.</p>
                <a href="{{ route('logout') }}" class="button"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection

<style>
    .dashboard-container {
        text-align: center;
        color: #F2F1EF;
    }

    .dashboard-container h1 {
        font-size: 2.5rem;
        color: #9C2327;
    }

    .dashboard-content {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 30px;
    }

    .card {
        background-color: #232222;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        width: 250px;
        color: #F2F1EF;
        text-align: center;
    }

    .card h3 {
        color: #9C2327;
    }

    .button {
        display: inline-block;
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #9C2327;
        color: #F2F1EF;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .button:hover {
        background-color: #B62B30;
    }
</style>
