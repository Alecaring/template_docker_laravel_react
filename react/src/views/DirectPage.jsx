import React from "react";
import { FiSend, FiSearch, FiMoreHorizontal } from "react-icons/fi";

export default function DirectPage() {
    const conversations = [
        { id: 1, name: "John Doe", lastMessage: "Hey, how's it going?", avatar: "https://www.dequo.it/articoli/app/uploads/2023/05/copyright-immagini-generate-ai12.jpg" },
        { id: 2, name: "Jane Smith", lastMessage: "Let's catch up soon!", avatar: "https://www.dequo.it/articoli/app/uploads/2023/05/copyright-immagini-generate-ai12.jpg" },
        { id: 3, name: "Alex Johnson", lastMessage: "See you tomorrow!", avatar: "https://www.dequo.it/articoli/app/uploads/2023/05/copyright-immagini-generate-ai12.jpg" },
    ];

    return (
        <div className="container h-75 mt-5">
            <div className="row h-100">
                {/* Colonna per i contatti */}
                <div className="col-md-4">
                    <div className="card mb-4 shadow-sm h-100">
                        <div className="card-body">
                            <div className="d-flex justify-content-between align-items-center mb-3">
                                <h5 className="h5">Contacts</h5>
                                <FiSend className="icon-send" style={{ fontSize: "24px", cursor: "pointer" }} />
                            </div>

                            <div className="input-group mb-3">
                                <span className="input-group-text"><FiSearch /></span>
                                <input type="text" className="form-control" placeholder="Search" />
                            </div>

                            {conversations.map((conversation) => (
                                <div key={conversation.id} className="d-flex align-items-center mb-3 conversation-item border-bottom pb-2">
                                    <img src={conversation.avatar} alt={conversation.name} className="rounded-circle me-2" style={{ width: "50px", height: "50px" }} />
                                    <div className="flex-grow-1">
                                        <h5 className="mb-0">{conversation.name}</h5>
                                        <p className="text-muted mb-0">{conversation.lastMessage}</p>
                                    </div>
                                    <FiMoreHorizontal className="icon-more" style={{ fontSize: "20px" }} />
                                </div>
                            ))}
                        </div>
                    </div>
                </div>

                {/* Colonna per la chat */}
                <div className="col-md-8 h-100">
                    <div className="card shadow-sm h-100">
                        <div className="card-header d-flex justify-content-between align-items-center">
                            <h5>John Doe</h5>
                            <FiMoreHorizontal className="icon-more" style={{ fontSize: "20px" }} />
                        </div>
                        <div className="card-body">
                            <div className="messages">
                                {/* Messaggi ricevuti */}
                                <div className="message received mb-2 text-start">
                                    <div className="bg-light p-2 rounded-start rounded-3" style={{ width: "fit-content", maxWidth: "50%", marginRight: "auto" }}>
                                        Hello! How are you?
                                    </div>
                                </div>
                                {/* Messaggi inviati */}
                                <div className="message sent mb-2 text-end">
                                    <div className="bg-primary text-white p-2 rounded-end rounded-3" style={{ width: "fit-content", maxWidth: "50%", marginLeft: "auto" }}>
                                        I'm good! You?
                                    </div>
                                </div>
                                {/* Aggiungi ulteriori messaggi qui */}
                            </div>
                        </div>
                        <div className="input-group mb-3">
                            <input type="text" className="form-control" placeholder="Type a message..." />
                            <button className="btn btn-primary">
                                <FiSend />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
