 //`http://localhost:8000/`;
const urlBase = is_htttps() ? 'https://futbolme.loading.net/' : 'http://localhost:8000/';
const csrfToken = $('meta[name="csrf-token"]').attr('content');