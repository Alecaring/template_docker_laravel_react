import { useRef, useState } from "react";
import { Link } from "react-router-dom";
import axiosClient from "../../axios-client";
import { useStateContext } from "../../context/contextProvider";

export default function Signup() {
    const nameRef = useRef();
    const emailRef = useRef();
    const passwordRef = useRef();
    const passwordConfirmationRef = useRef();

    const [errors, setErrors] = useState(null);
    const [isLoading, setIsLoading] = useState(false);

    const { setUser, setToken } = useStateContext();

    const onSubmit = (ev) => {
        ev.preventDefault();
        setIsLoading(true);
        const payload = {
            name: nameRef.current.value,
            email: emailRef.current.value,
            password: passwordRef.current.value,
            password_confirmation: passwordConfirmationRef.current.value,
        };

        axiosClient.post('/signup', payload)
            .then(({ data }) => {
                setUser(data.user);
                setToken(data.token);
            })
            .catch(err => {
                const response = err.response;
                if (response) {
                    if (response.status === 422) {
                        setErrors(response.data.errors);
                    } else {
                        setErrors({ general: ["Something went wrong. Please try again."] });
                    }
                } else {
                    setErrors({ general: ["Network error. Please check your connection."] });
                }
            })
            .finally(() => {
                setIsLoading(false);
            });
    };

    return (
        <div className="signup-container container mt-5">
            <div className="signup-card card">
                <div className="card-body">
                    <h2 className="card-title">Create Your Account</h2>
                    <form onSubmit={onSubmit} className="signup-form">
                        <div className="mb-3">
                            <label htmlFor="username" className="form-label">Full Name</label>
                            <input ref={nameRef} type="text" id="username" className="form-control" placeholder="Full Name" autoComplete="name" />
                        </div>
                        <div className="mb-3">
                            <label htmlFor="email" className="form-label">Email Address</label>
                            <input ref={emailRef} type="email" id="email" className="form-control" placeholder="Email Address" autoComplete="email" />
                        </div>
                        <div className="mb-3">
                            <label htmlFor="password" className="form-label">Password</label>
                            <input ref={passwordRef} type="password" id="password" className="form-control" placeholder="Password" autoComplete="new-password" />
                        </div>
                        <div className="mb-3">
                            <label htmlFor="passwordConfirmation" className="form-label">Confirm Password</label>
                            <input ref={passwordConfirmationRef} type="password" id="passwordConfirmation" className="form-control" placeholder="Confirm Password" autoComplete="new-password" />
                        </div>

                        <p>
                            Already Registered? <Link to='/login'>Log in</Link>
                        </p>
                        <button type="submit" className="btn btn-primary" disabled={isLoading}>
                            {isLoading ? "Signing Up..." : "Sign Up"}
                        </button>
                    </form>
                </div>
            </div>
            {errors && (
                <div className="alert alert-danger mt-3">
                    {errors.general && <h6>{errors.general[0]}</h6>}
                    {Object.keys(errors).map(key => (
                        <h6 key={key}>{errors[key][0]}</h6>
                    ))}
                </div>
            )}
        </div>
    );
}
