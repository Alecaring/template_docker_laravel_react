import { Navigate, Outlet } from "react-router-dom";
import { useStateContext } from "../../context/contextProvider";
import { useEffect } from "react";
import axiosClient from '../../axios-client';
import SidebarDefault from "./common/Sidebar";
import NavbarDefault from "./common/Navbar";

export default function DefaultLayout() {
  const { user, token, setUser, setToken } = useStateContext();

  if (!token) {
    return <Navigate to='/login' />;
  }

  const onLogout = (ev) => {
    ev.preventDefault();
    axiosClient.post('/logout')
      .then(() => {
        setUser({});
        setToken(null);
      });
  };

  useEffect(() => {
    axiosClient.get('/user')
      .then(({ data }) => {
        setUser(data);
      });
  }, []);

  return (
    <>
      <div className="d-flex">
        <SidebarDefault />
        <div className="main-content flex-fill">
          <NavbarDefault user={user} onLogout={onLogout} />
          <Outlet />
        </div>
      </div>
    </>
  );
}
