const App = {
    data() {
        return {
            rooms: [],
            roomDetails: {},
            shown: false
        }
    },
    methods: {
        getRoomsList() {
            axios
                .get("http://localhost:63342/db-hotel/rooms/server/api/roomsList.php")
                .then(response => {
                    this.rooms = response.data;
                })
        },
        showRoomDetails(room_number) {
            axios
                .get(`http://localhost:63342/db-hotel/rooms/server/api/room.php?id=${room_number}`)
                .then(response => {
                    this.roomDetails = response.data;
                    this.shown = true;
                })
        }
    },
    created() {
        this.getRoomsList();
    }
}

Vue.createApp(App).mount('#app');