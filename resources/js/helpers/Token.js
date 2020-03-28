class Token {
    isValid() {
        const payload = this.payload(token);
        if (payload) {
            return payload.iss == "http://localhost:8000/api/auth/login" ? true : false;
        }
    }
    payload(token) {
        const payload = token.split('.')[1];
        console.log(this.decode(payload));
    }
    decode(payload) {
        return JSON.parse(atob(payload));
    }
}

export default Token = new Token();