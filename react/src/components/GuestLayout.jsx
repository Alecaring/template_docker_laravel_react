import { Navigate, Outlet } from "react-router-dom";
import { useStateContext } from "../../context/contextProvider";

export default function GuestLayouts() {

    const { token } = useStateContext();

    if (token) {
        return <Navigate to='/' />
    }

    return (
        <div>
            <Outlet />
        </div>
    )
}
