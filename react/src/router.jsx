import { Navigate, createBrowserRouter } from 'react-router-dom';
import Login from './views/Login';
import Signup from './views/Signup';
import Users from './views/Users';
import NotFound from './views/NotFound';
import DefaultLayout from './components/DefaultLayout';
import GuestLayouts from './components/GuestLayout';
import Dashboard from './views/Dashboard';
import SettingUser from './views/SettingUser';
import DirectPage from './views/DirectPage';

const router = createBrowserRouter([
    {
        path: '/',
        element: <DefaultLayout />,
        children: [
            {
                path: '/',
                element: <Navigate to='/dashboard' />
            },
            {
                path: '/dashboard',
                element: <Dashboard />
            },
            {
                path: '/users',
                element: <Users />
            },
            {
                path: '/setting',
                element: <SettingUser />
            },
            {
                path: '/direct',
                element: <DirectPage />
            },
        ]
    },
    {
        path: '/',
        element: <GuestLayouts />,
        children: [
            {
                path: '/login',
                element: <Login />
            },
            {
                path: '/signup',
                element: <Signup />
            },
        ]
    },


    {
        path: '*',
        element: <NotFound />
    },
])

export default router;