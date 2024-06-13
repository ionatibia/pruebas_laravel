<template>
    <div>
        <h1>Chat</h1>
        <div v-if="messages">
            {{ messages[0].messages[0] }}
        </div>
        <div><button @click="sendMessage()">Send</button></div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    name: "ChatComponent",
    props: {
        chat: {
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
        Echo.private("servicios." + this.chat.id).listen(
            "GotMessage",
            async (e) => {
                console.log(e);
                await getMessages();
            }
        );
        const self = this;
        async function getMessages() {
            const response = await axios.get("/messages/" + self.chat.id);
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
                    to: 2,
                    chat_id: self.chat.id,
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
