import React, {useEffect} from "react";
import {httpConfig} from "../../misc/http-config";
import {Link} from "react-router-dom";
import {UseJwt, UseJwtProfileId, UseJwtUsername} from "../../misc/JwtHelpers";

import Navbar from "react-bootstrap/Navbar";
import Nav from "react-bootstrap/Nav";
import NavDropdown from "react-bootstrap/NavDropdown";
import Button from "react-bootstrap/Button";
import {FontAwesomeIcon} from "@fortawesome/react-fontawesome";
import {SignUpModal} from "./sign-up/SignUpModal";
import {SignInModal} from "../sign-in/SigninModal";
export const NavBar = () => {

	// grab the jwt and username for logged in users
	const jwt = UseJwt();
	
	useEffect( () =>{
		httpConfig.get("/apis/sessionAPI/")
	});

	const signOut = () => {
		httpConfig.get("apis/sign-out/")
			.then(reply => {
				if (reply.status === 200) {
					window.localStorage.removeItem("jwt-token");
					console.log(reply);
					setTimeout(() => {
						window.location.reload();
					}, 1500);
				}
			});
	};

	return (
		<>
			<header>
				<Navbar bg="light" expand="md" variant="light" fixed="top">
					<Link to="/">
						<Navbar.Brand>=^ Octo Meow 7.0 ^=</Navbar.Brand>
					</Link>
					<Navbar.Text className="small font-italic d-none d-md-inline-block">A DDC React Demo.</Navbar.Text>
					<Navbar.Toggle aria-controls="basic-navbar-nav"></Navbar.Toggle>

					<Navbar.Collapse>
						<Nav className="ml-auto">

							{/* conditional render if user has jwt / is logged in */}
							{jwt !== null && (
								<NavDropdown className="nav-link navbar-username" title={"Welcome, " + Username + "!"}>
									<div className="dropdown-item">
										<Link to={`/profile/${profileId}`} className="nav-link">
											<FontAwesomeIcon icon="user" />&nbsp;&nbsp;My Profile
										</Link>
									</div>
									<div className="dropdown-divider"></div>
									<div className="dropdown-item sign-out-dropdown">
										<button className="btn btn-outline-dark" onClick={signOut}>
											Sign Out&nbsp;&nbsp;<FontAwesomeIcon icon="sign-out-alt" />
										</button>
									</div>
								</NavDropdown>
							)}

							<Link className="nav-link" to="/posts">
								<Button variant="outline-dark" className="btn-block">
									<FontAwesomeIcon icon="cat" />&nbsp;Posts
								</Button>
							</Link>
						</Nav>
					</Navbar.Collapse>
				</Navbar>
			</header>
		</>
	)
};