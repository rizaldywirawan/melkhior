const httpClient = axios.create({
    baseURL: import.meta.env.BASE_URL,
    withCredentials: true,
    headers: {
        Accept: 'application/json'
    }
})

export {httpClient}