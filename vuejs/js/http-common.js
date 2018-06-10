import axios from 'axios';
import {HTTP} from './http-common';
export const HTTP = axios.create({
  baseURL: 'http://dev.nostratech.com:10093/api/v1/person',
  headers: {
    Authorization: 'Bearer {token}'
  }
})