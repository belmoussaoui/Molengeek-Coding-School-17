import React from "react";

export default function BoilingVerdict({ celsius }) {
    return celsius > 100 ? (
        <p className="alert alert-success">L'eau bout</p>
    ) : (
        <p className="alert alert-info">L'eau ne bout pas</p>
    );
}
