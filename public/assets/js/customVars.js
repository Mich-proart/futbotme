 //`http://localhost:8000/`;
const urlBase = is_htttps() ? 'https://futbolme.eu/' : 'http://localhost:8000/';
const csrfToken = $('meta[name="csrf-token"]').attr('content');