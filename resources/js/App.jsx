import React from "react";
import ReactDOM from "react-dom/client";

const App = () => {
    return (
        <div className="p-6 text-white bg-blue-500 rounded-xl">
            <h1 className="text-3xl font-bold">Hola desde React + Hol!</h1>
        </div>
    );
};

export default App;

if (document.getElementById("root")) {
    const Index = ReactDOM.createRoot(document.getElementById("root"));

    Index.render(
        <React.StrictMode>
            <App />
        </React.StrictMode>
    );
}
