import React from 'react';

import { Link } from 'react-router-dom';

import img1 from 'assets/images/users/1.jpg';
import img2 from 'assets/images/users/2.jpg';
import img3 from 'assets/images/users/3.jpg';
import img4 from 'assets/images/users/4.jpg';
import { Card, CardBody, CardTitle, Input, Table, Tooltip } from 'reactstrap';

class Perfil extends React.Component {
  constructor(props) {
    super(props);

    this.toggle10 = this.toggle10.bind(this);
    this.toggle20 = this.toggle20.bind(this);
    this.toggle30 = this.toggle30.bind(this);
    this.toggle40 = this.toggle40.bind(this);
    this.state = {
      tooltipOpen10: false,
      tooltipOpen20: false,
      tooltipOpen30: false,
      tooltipOpen40: false
    };
  }

  toggle10() {
    this.setState({
      tooltipOpen10: !this.state.tooltipOpen10
    });
  }

  toggle20() {
    this.setState({
      tooltipOpen20: !this.state.tooltipOpen20
    });
  }

  toggle30() {
    this.setState({
      tooltipOpen30: !this.state.tooltipOpen30
    });
  }

  toggle40() {
    this.setState({
      tooltipOpen40: !this.state.tooltipOpen40
    });
  }

  render() {
    return (
      <div>
        <Card>
          <CardBody>
            <div className="d-flex align-items-center">
              <div>
                <CardTitle>Perfil da Familia</CardTitle>
              </div>
            </div>
            <Table className="no-wrap v-middle" responsive>
              <thead>
                <tr className="border-0">
                  <th className="border-0">Familia</th>
                  <th className="border-0">CPF</th>

                  <th className="border-0">Status</th>
                  <th className="border-0">Telefone</th>
                  <th className="border-0">Endereço</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div className="d-flex no-block align-items-center">
                      <div className="mr-2">
                        <Link to="/perfil">
                          <img
                            src={img1}
                            alt="user"
                            className="rounded-circle"
                            width="45"
                          />
                        </Link>
                      </div>
                      <div className="">
                        <h5 className="mb-0 font-16 font-medium"></h5>
                        <form>
                          <label>
                            <input
                              type="text"
                              name="name"
                              placeholder="Hanna Gover"
                            />
                          </label>
                        </form>
                        <form>
                          <label>
                            <input
                              type="text"
                              name="name"
                              placeholder="hgover@gmail.com"
                            />
                          </label>
                        </form>
                      </div>
                    </div>
                  </td>

                  <td>
                    <form>
                      <label>
                        <input
                          type="text"
                          name="name"
                          placeholder="xxx.xxx.xxx-xx"
                        />
                      </label>
                    </form>
                  </td>

                  <td>
                    <i className="fa fa-circle text-orange" id="tlp1"></i>
                    <Tooltip
                      placement="top"
                      isOpen={this.state.tooltipOpen10}
                      target="tlp1"
                      toggle={this.toggle10}
                    >
                      Inativo
                    </Tooltip>
                  </td>
                  <td>
                    <form>
                      <label>
                        <input
                          type="text"
                          name="name"
                          placeholder="xxxxx-xxxx"
                        />
                      </label>
                    </form>
                  </td>
                  <td className="blue-grey-text  text-darken-4 font-medium">
                    <form>
                      <label>
                        <input
                          type="text"
                          name="name"
                          placeholder="Av Rudge 1112"
                        />
                      </label>
                    </form>
                  </td>
                </tr>
              </tbody>
            </Table>
          </CardBody>
        </Card>
      </div>
    );
  }
}

export default Perfil;
