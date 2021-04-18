import React from "react";

export default function Contact() {
    return (
        <div>
            <h3 className="text-center">Contact</h3>
            <div className="px-0 px-md-3 px-lg-5 pt-1">
                <input
                    type="name"
                    className="form-control my-4 border-0 rounded-0"
                    placeholder="Votre Nom"
                    style={{ height: "50px", fontFamily: "Raleway" }}
                />
                <input
                    type="email"
                    className="form-control  my-4 border-0 rounded-0"
                    placeholder="Email"
                    style={{ height: "50px", fontFamily: "Raleway" }}
                />
                <textarea
                    className="form-control  my-4 border-0 rounded-0"
                    rows="6"
                    placeholder="Message"
                    style={{ fontFamily: "Raleway" }}
                ></textarea>
                <div className="text-center">
                    <button
                        className="btn btn-warning text-white fw-bold px-5 py-2 fs-5"
                        style={{ fontFamily: "Raleway" }}
                    >
                        Envoyer
                    </button>
                </div>
            </div>
        </div>
    );
}
