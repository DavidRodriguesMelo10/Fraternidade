import React from 'react';
import { Row, Col } from 'reactstrap';
import { Projects, Feeds } from 'components/dashboard-components';

class Starter extends React.Component {
  render() {
    return (
      <div>
        <Row>
          <Col sm={6} lg={4}>
            <Feeds />
          </Col>
        </Row>
        <Row>
          <Col sm={12}>
            <Projects />
          </Col>
        </Row>
      </div>
    );
  }
}

export default Starter;
