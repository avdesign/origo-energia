// axios
import axios from 'axios'

//import {URI_BASE_API} from './configs/api.js'

const domain = ""

export default axios.create({
  domain
  //baseURL: URI_BASE_API,
  // You can add your headers here
})
