import { useRef, useState } from "react";
import { Link } from "react-router-dom";
import { useStateContext } from "../../context/contextProvider";
import axiosClient from "../../axios-client";

export default function Login() {
    const emailRef = useRef();
    const passwordRef = useRef();
    const [errors, setErrors] = useState(null);
    const { setUser, setToken } = useStateContext();

    const onSubmit = (ev) => {
        ev.preventDefault();
        const payload = {
            email: emailRef.current.value,
            password: passwordRef.current.value,
        };

        axiosClient.post('/login', payload)
            .then(({ data }) => {
                setUser(data.user);
                setToken(data.token);
            })
            .catch(err => {
                const response = err.response;
                console.log("Error:", err.message);

                if (response && response.status === 422) {
                    if (response.data.errors) {
                        setErrors(response.data.errors);
                        console.log(response.data.errors);
                    } else {
                        setErrors({
                            email: [response.data.message]
                        });
                    }
                } else {
                    console.error("Error Status:", response.status);
                }
            });
    };

    return (
        <div className="container mt-5">
            <div className="row justify-content-center">
                <div className="col-md-4">
                    <div className="card">
                        <div className="card-body">
                            <h2 className="text-center">Login</h2>
                            <form onSubmit={onSubmit}>
                                <div className="mb-3">
                                    <label htmlFor="username" className="form-label">Username</label>
                                    <input ref={emailRef} type="text" id="username" className="form-control" placeholder="Enter your username" />
                                </div>
                                <div className="mb-3">
                                    <label htmlFor="password" className="form-label">Password</label>
                                    <input ref={passwordRef} type="password" id="password" className="form-control" placeholder="Enter your password" />
                                </div>
                                <p className="text-center">
                                    Don't you have an account? <Link to='/signup'>Register</Link>
                                </p>
                                <button type="submit" className="btn btn-primary w-100">Login</button>
                            </form>
                            {errors && (
                                <div className="mt-3 text-danger">
                                    {Object.keys(errors).map(key => (
                                        <div key={key}>{errors[key][0]}</div>
                                    ))}
                                </div>
                            )}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
