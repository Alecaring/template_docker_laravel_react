export default function NavbarDefault({ user, onLogout }) {
    return (
        <header className="dashboard-header d-flex justify-content-between align-items-center p-3 bg-light">
            <h2 className="h4">Welcome, {user.name}!</h2>
            <div className="user-info d-flex flex-column align-items-end">
                <h5 className="mb-0">{user.name}</h5>
                <h5 className="mb-0">{user.email}</h5>
                <button 
                    onClick={onLogout} 
                    className="btn btn-link p-0" 
                    aria-label="Logout"
                >
                    Logout
                </button>
            </div>
        </header>
    );
}
