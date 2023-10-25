import "./App.css";
import { BrowserRouter as Router, Route, Link, Routes } from "react-router-dom";
import Contact from "./Pages/contact.jsx";
import About from "./Pages/about.jsx";
import Home from "./Pages/home.jsx";
import Footer from "./Pages/footer.jsx";
import React from "react";

function App() {
	return (
		<Router>
			<nav>
				<h1>Navbar</h1>
				<ul>
					<li>
						<button>
							<Link to="/">Home</Link>
						</button>
					</li>
					<li>
						<button>
							<Link to="/about">About Us</Link>
						</button>
					</li>
					<li>
						<button>
							<Link to="/contact">Contact</Link>
						</button>
					</li>
				</ul>
			</nav>
				<Routes>
          <Route path="/" exact Component={Home}/>
          <Route path="/about" exact Component={About}/>
          <Route path="/contact" exact Component={Contact}/>
				</Routes>
			<Footer></Footer>
		</Router>
	);
}

export default App;
