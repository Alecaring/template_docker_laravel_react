export default function UserProfile() {
    return (
        <section className="user-profile container mt-5">
            {/* Sezione superiore con l'avatar e le statistiche */}
            <div className="profile-header d-flex align-items-center mb-4 shadow-sm p-3 bg-white rounded">
                <div className="profile-avatar me-3">
                    <img src="https://via.placeholder.com/150" alt="User Avatar" className="img-fluid rounded-circle" />
                </div>
                <div className="profile-details">
                    <h2 className="h4">John Doe</h2>
                    <div className="profile-stats d-flex">
                        <div className="stat me-4 text-center">
                            <strong className="d-block fs-5">120</strong>
                            <span className="d-block text-muted">Posts</span>
                        </div>
                        <div className="stat me-4 text-center">
                            <strong className="d-block fs-5">340</strong>
                            <span className="d-block text-muted">Followers</span>
                        </div>
                        <div className="stat text-center">
                            <strong className="d-block fs-5">180</strong>
                            <span className="d-block text-muted">Following</span>
                        </div>
                    </div>
                </div>
            </div>

            {/* Sezione per i post dell'utente */}
            <div className="profile-posts">
                <h3 className="h5 mb-3">Posts</h3>
                <div className="posts-grid row">
                    {/* I post possono essere immaginari o importati dinamicamente */}
                    {[...Array(9)].map((_, index) => (
                        <div className="post col-4 mb-4" key={index}>
                            <div className="post-wrapper rounded overflow-hidden shadow-sm">
                                <img src={`https://via.placeholder.com/200?text=Post+${index + 1}`} alt={`Post ${index + 1}`} className="img-fluid" />
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </section>
    );
}
