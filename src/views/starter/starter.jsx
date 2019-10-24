import React from 'react';
import { Row, Col } from 'reactstrap';
import { Projects } from 'components/dashboard-components';

class Starter extends React.Component {
  render() {
    return (
      <div>
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
