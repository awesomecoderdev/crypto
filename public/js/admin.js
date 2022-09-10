function AdminController() {
    return {
        deleteModal: false,
        deleteId: null,
        bulkAction: false,
        edit: false,
        setDelete(e) {
            this.deleteModal = !this.deleteModal;
            this.deleteId = e.target.getAttribute("data-deleteId");
        },
        deleteAction() {
            this.deleteModal = false;
            if (this.deleteId !== null) {
                console.log(this.deleteId);
                document.getElementById(this.deleteId).submit();
                this.deleteId = null;
            }
        },
    };
}
