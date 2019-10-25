import React from 'react';
import {
  Nav,
  Navbar,
  NavbarBrand,
  Collapse,
  DropdownItem,
  Button,
  UncontrolledDropdown,
  DropdownToggle,
  DropdownMenu
} from 'reactstrap';

import profilephoto from '../../assets/images/users/1.jpg';

/*--------------------------------------------------------------------------------*/
/* Import images which are need for the HEADER                                    */
/*--------------------------------------------------------------------------------*/
import logo from '../../assets/images/logo.jpg';

class Header extends React.Component {
  constructor(props) {
    super(props);
    this.toggle = this.toggle.bind(this);
    this.state = {
      isOpen: false
    };
  }
  /*--------------------------------------------------------------------------------*/
  /*To open NAVBAR in MOBILE VIEW                                                   */
  /*--------------------------------------------------------------------------------*/
  toggle() {
    this.setState({
      isOpen: !this.state.isOpen
    });
  }

  render() {
    return (
      <header className="topbar navbarbg" data-navbarbg="skin1">
        <Navbar className="top-navbar" dark expand="md">
          <div className="navbar-header" id="logobg" data-logobg="skin6">
            {/*--------------------------------------------------------------------------------*/}
            {/* Logos Or Icon will be goes here for Light Layout && Dark Layout                */}
            {/*--------------------------------------------------------------------------------*/}
            <NavbarBrand href="/">
              <b>
                <img src={logo} alt="homepage" className="logo" />
              </b>
            </NavbarBrand>
            {/*--------------------------------------------------------------------------------*/}
            {/* Mobile View Toggler  [visible only after 768px screen]                         */}
            {/*--------------------------------------------------------------------------------*/}
            <a
              className="nav-toggler d-block d-md-none"
              onClick={this.showMobilemenu}
            >
              <i className="ti-menu ti-close" />
            </a>
          </div>
          <Collapse
            className="navbarbg"
            isOpen={this.state.isOpen}
            navbar
            data-navbarbg="skin1"
          >
            <Nav className="ml-auto float-right" navbar>
              {/*--------------------------------------------------------------------------------*/}
              {/* Start Profile Dropdown                                                         */}
              {/*--------------------------------------------------------------------------------*/}
              <UncontrolledDropdown nav inNavbar>
                <DropdownToggle nav caret className="pro-pic">
                  <img
                    src={profilephoto}
                    alt="user"
                    className="rounded-circle"
                    width="31"
                  />
                </DropdownToggle>
                <DropdownMenu right className="user-dd">
                  <DropdownItem divider />
                  <DropdownItem>
                    <i className="ti-settings mr-1 ml-1" /> Configuração da
                    conta
                  </DropdownItem>
                  <DropdownItem divider />
                  <DropdownItem href="/pages/login">
                    <i className="fa fa-power-off mr-1 ml-1" /> Sair
                  </DropdownItem>
                  <DropdownItem divider />
                  <Button
                    color="success"
                    className="btn-rounded ml-3 mb-2 mt-2"
                  >
                    Ver Perfil
                  </Button>
                </DropdownMenu>
              </UncontrolledDropdown>
              {/*--------------------------------------------------------------------------------*/}
              {/* End Profile Dropdown                                                           */}
              {/*--------------------------------------------------------------------------------*/}
            </Nav>
          </Collapse>
        </Navbar>
      </header>
    );
  }
}
export default Header;
