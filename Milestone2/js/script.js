const app = new Vue({
    el: "#root",
    data: {
      database: [],
    },
    created() {
      axios
        .get("./server.php")
        .then((resp) => {
          this.database = resp.data;
        });
    },
  });
