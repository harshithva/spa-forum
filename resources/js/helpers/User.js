class User {
    login(data) {
        axios
            .post("api/auth/login", data)
            .then(res => console.log(res.data))
            .catch(err => console.log(error.response.data));
    }
}