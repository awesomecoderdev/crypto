function PublicController() {
    return {
        scrollBackTop: false,
        token: null,
        change: null,
        root: document.getElementsByTagName("html")[0],
        changeTheme(e) {
            this.token = e.target.getAttribute("data-token");
            this.change = e.target.getAttribute("data-change");
            // console.log(this.change);
            this.root.classList.toggle("dark");
            axios.post(this.change, {
                _token: this.token,
            });
        },
    };
}
