import React from "react";
import ReactDOM from "react-dom/client";

function Example() {
    return (
        <div className="max-w-2xl px-4 mx-auto">
            <div className="overflow-hidden bg-white rounded-lg shadow-md">
                <div className="px-6 py-4 text-lg font-semibold bg-gray-100">
                    Example Component
                </div>
                <div className="px-6 py-4 text-gray-700">
                    I'm an example component!
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById("root")) {
    const Index = ReactDOM.createRoot(document.getElementById("root"));

    Index.render(
        <React.StrictMode>
            <Example />
        </React.StrictMode>
    );
}
