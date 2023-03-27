import axios from "axios";

const axiosInstance = axios.create({
    baseURL: 'http://127.0.0.1:8000/api/v1'
});

 const setBearerToken = (token) => token;
axiosInstance.defaults.headers.common['Authorization'] = `Bearer ${setBearerToken}`;
axiosInstance.defaults.headers.common['Content-Type'] = 'application/json';

export default axiosInstance;
export {setBearerToken};