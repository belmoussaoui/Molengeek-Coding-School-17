import React from "react";

export default function Video() {
    return (
        <>
            <video
                id="video1"
                muted
                loop
                autoPlay
                width="800"
                height="600"
                src="./img/mini_metro.mov"
                style={{ display: "none" }}
            ></video>
            <video
                id="video2"
                muted
                loop
                autoPlay
                width="944"
                height="1672"
                src="./img/flappy_bird.mov"
                style={{ display: "none" }}
            ></video>
        </>
    );
}
