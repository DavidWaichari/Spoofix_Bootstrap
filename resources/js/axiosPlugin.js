import axios from 'axios';

const axiosPlugin = {
  install(app) {
    // Set a global base URL for Axios requests
    axios.defaults.baseURL = 'http://localhost:5000'; // Replace with your API base URL

    // Set common headers for all requests
    axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

    // Optionally set other default configurations like timeout, headers, etc.
    // axios.defaults.timeout = 5000; // Timeout for requests in milliseconds

    // Make Axios available in your Vue components
    app.config.globalProperties.$axios = axios;

    // Intercept each request to add the Bearer token
    axios.interceptors.request.use(
      (config) => {
        const token = localStorage.getItem('token');
        if (token) {
          config.headers.Authorization = `Bearer ${token}`;
        }
        return config;
      },
      (error) => {
        return Promise.reject(error);
      }
    );
  },
};

export default axiosPlugin;
