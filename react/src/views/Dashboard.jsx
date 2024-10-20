import { Link } from "react-router-dom";

export default function DashboardInstagramStyle() {
    const stories = [
        { id: 1, name: "Your Story", image: "https://www.dequo.it/articoli/app/uploads/2023/05/copyright-immagini-generate-ai12.jpg" },
        { id: 2, name: "John", image: "https://www.dequo.it/articoli/app/uploads/2023/05/copyright-immagini-generate-ai12.jpg" },
        { id: 3, name: "Sarah", image: "https://www.dequo.it/articoli/app/uploads/2023/05/copyright-immagini-generate-ai12.jpg" },
        // Aggiungi più storie come vuoi
    ];

    const posts = [
        { id: 1, user: "John", image: "https://www.dequo.it/articoli/app/uploads/2023/05/copyright-immagini-generate-ai12.jpg", likes: 120, comments: 34 },
        { id: 2, user: "Sarah", image: "https://www.dequo.it/articoli/app/uploads/2023/05/copyright-immagini-generate-ai12.jpg", likes: 220, comments: 50 },
        // Aggiungi più post come vuoi
    ];

    return (
        <section className="container mt-4">
            {/* Barra delle storie */}
            <div className="d-flex justify-content-start mb-4">
                {stories.map((story) => (
                    <div key={story.id} className="text-center me-3">
                        <img
                            src={story.image}
                            alt={story.name}
                            className="rounded-circle border border-primary"
                            style={{ width: "70px", height: "70px" }}
                        />
                        <p className="mt-2">{story.name}</p>
                    </div>
                ))}
            </div>

            {/* Collegamento ai direct */}
            <div className="text-end mb-4">
                <Link to="/direct">
                    <img src="https://cdn-icons-png.flaticon.com/512/2526/2526496.png" alt="Direct Messages" className="direct-icon" style={{ width: "30px", height: "30px" }} />
                </Link>
            </div>

            {/* Feed dei post */}
            <div className="row">
                {posts.map((post) => (
                    <div key={post.id} className="col-12 mb-4">
                        <div className="card">
                            <div className="card-header d-flex align-items-center">
                                <img
                                    src="https://www.dequo.it/articoli/app/uploads/2023/05/copyright-immagini-generate-ai12.jpg"
                                    alt={post.user}
                                    className="rounded-circle border me-2"
                                    style={{ width: "40px", height: "40px" }}
                                />
                                <strong>{post.user}</strong>
                            </div>
                            <img src={post.image} alt="Post" className="card-img-top" />
                            <div className="card-body">
                                <p className="card-text">{post.likes} likes</p>
                                <p className="card-text">{post.comments} comments</p>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </section>
    );
}
