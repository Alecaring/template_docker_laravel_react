import { Link, useLocation } from "react-router-dom";
import { useStateContext } from "../../../context/contextProvider"; // Import context for logout

export default function SidebarDefault() {
    const location = useLocation();
    const { setUser, setToken } = useStateContext(); // Extract logout functions

    const handleLogout = () => {
        // Perform logout logic
        setUser({});
        setToken(null);
        // Optionally redirect to login
        // You can use history.push or navigate to redirect
    };

    return (
        <aside className="sidebar d-flex flex-column p-3 bg-light" style={{ width: '250px', height: '100vh' }} role="navigation" aria-label="Sidebar Navigation">
            <div className="sidebar-header mb-4">
                <h2 className="h5">My Dashboard</h2>
            </div>
            <ul className="sidebar-menu list-unstyled">
                <Link to='/dashboard' className="text-decoration-none">
                    <li className={`menu-item py-2 px-3 rounded ${location.pathname === '/dashboard' ? 'bg-primary text-white' : ''}`}>
                        Overview
                    </li>
                </Link>

                <Link to='/users' className="text-decoration-none">
                    <li className={`menu-item py-2 px-3 rounded ${location.pathname === '/users' ? 'bg-primary text-white' : ''}`}>
                        Profile
                    </li>
                </Link>

                <Link to='/setting' className="text-decoration-none">
                    <li className={`menu-item py-2 px-3 rounded ${location.pathname === '/setting' ? 'bg-primary text-white' : ''}`}>
                        Settings
                    </li>
                </Link>

                <Link to='/direct' className="text-decoration-none">
                    <li className={`menu-item py-2 px-3 rounded ${location.pathname === '/direct' ? 'bg-primary text-white' : ''}`}>
                        Messages
                    </li>
                </Link>

                <li className="menu-item py-2 px-3 rounded" onClick={handleLogout} style={{ cursor: 'pointer' }}>
                    Logout
                </li>
            </ul>
        </aside>
    );
}
