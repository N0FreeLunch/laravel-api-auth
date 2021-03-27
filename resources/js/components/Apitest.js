import React from 'react';
import ReactDOM from 'react-dom';

import axios from 'axios';

const apiTest = () => {
  axios({
    method: 'post',
    url: '/auth',
    data: {
      firstName: 'Fred',
      lastName: 'Flintstone'
    }
  }).then(r => {
    console.log(r);
    alert("통신이 성공 했습니다.")
  }).catch(r => {
    console.log(r);
    alert("인증이 거부되었습니다.")
  })
}

const Apitest = () => {
  const [loginState, setLoginState] = React.useState();

  return (
    <div>
      <button onClick={apiTest}>APITEST</button>
    </div>
  )
}

export default Apitest;
