<template>
    <div>
        <h1>Chat</h1>
        <div v-if="messages">
            {{ messages }}
        </div>
        <div><button @click="sendMessage()">Send</button></div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    name: "ChatComponent",
    props: {
        service: {
            type: Object,
            default: null,
        },
    },
    data() {
        return {
            messages: null,
            text: "Hola muy buenas",
        };
    },
    async beforeMount() {
        console.log(this.service);
        Echo.private("servicios." + this.service.id).listen(
            "GotMessage",
            async (e) => {
                console.log("dddddddddddddddddd");
                console.log(e);
                await getMessages();
            }
        );
        const self = this;
        async function getMessages() {
            const response = await axios.get("/messages");
            if (response.status === 200) {
                self.messages = response.data;
            }
        }
        await getMessages();
    },
    methods: {
        async sendMessage() {
            const self = this;
            try {
                await axios.post("/message", {
                    text: self.text,
                    to: 3,
                    chat_id: 1,
                    service_id: 1,
                });
            } catch (error) {
                console.log(error);
            }
        },
    },
};
</script>

<style></style>
