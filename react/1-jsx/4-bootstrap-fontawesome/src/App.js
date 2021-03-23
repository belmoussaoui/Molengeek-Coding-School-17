import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faHome } from "@fortawesome/free-solid-svg-icons";
import Button from "react-bootstrap/Button";

export default function App() {
    return (
        <div className="text-center">
            <Button className="m-5 bg-danger">
                Home! <FontAwesomeIcon icon={faHome} />
            </Button>
        </div>
    );
}
