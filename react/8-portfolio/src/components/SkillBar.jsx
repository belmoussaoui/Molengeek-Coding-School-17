import React from "react";

const ranks = [
    "E",
    "E+",
    "D",
    "D+",
    "C",
    "C+",
    "B",
    "B+",
    "A",
    "A+",
    "S",
    "S+",
];


export default function SkillBar({ img, rank }) {
    const style = rank === "S+" ? "progress-skill-gold" : "progress-skill";
    const width = {
        width: `${ranks.indexOf(rank) * (100 / (ranks.length - 1))}%`,
    };
    return (
        <div className="row align-items-center my-4" style={{ height: "48px" }}>
            <div className="col-3 col-md-2 m-auto p-0 text-center al">
                <img src={img} alt="" className="icon-skill" />
            </div>
            <div className="col-6 col-md-8 p-0">
                <div className="progress my-auto">
                    <div
                        className={`progress-bar ${style}`}
                        style={width}
                        role="progressbar"
                        aria-valuenow="75"
                        aria-valuemin="0"
                        aria-valuemax="100"
                    ></div>
                </div>
            </div>
            <div className="col-3 col-md-2 skill-rank p-0 text-center">
                {rank}
            </div>
        </div>
    );
}
