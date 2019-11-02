import React from 'react';
import ReactDOM from 'react-dom';
import Example from './component/Example';

const App = () => (
  <Example name="world" />
);

ReactDOM.render(<App />, document.getElementById('root'));
