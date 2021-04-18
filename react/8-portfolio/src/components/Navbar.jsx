import React from "react";
// import { Link } from "react-router-dom";

export default function Navbar({ show }) {
    return (
        <div>
            {!show && (
                <nav className="navbar navbar-expand-lg fixed-top navbar-expand-md p-3 px-4 position-absolute w-100">
                    <span className="navbar-brand ml-3">
                        Bilal El Moussaoui
                    </span>
                    {/* <button
                        className="navbar-toggler navbar-light bg-light"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span className="navbar-toggler-icon"></span>
                    </button> */}
                    <div
                        className="collapse navbar-collapse justify-content-end mr-5"
                        id="navbarNav"
                    >
                        {/* <ul className="navbar-nav">
                            <li className="nav-item mx-2">
                                <a className="nav-link" href="#about">
                                    À propos
                                </a>
                            </li>
                            <li className="nav-item active mx-2">
                                <a className="nav-link" href="#">
                                    Compétences
                                </a>
                            </li>
                            <li className="nav-item active mx-2">
                                <a className="nav-link" href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li className="nav-item mx-2">
                                <a className="nav-link" href="#portfolio">
                                    <Link to="./Contact" className="nav-link">
                                    Contact
                                </Link>
                                    Contact
                                </a>
                            </li>
                        </ul> */}
                    </div>
                </nav>
            )}
        </div>
    );
}
