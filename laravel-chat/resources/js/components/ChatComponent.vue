<template>
    <div>
        <h1>Chat</h1>
        <div v-if="messages">
            <div v-for="(message, m) in messages" :key="m" class="chat">
                <h6>{{ message.name }}</h6>
                <div v-for="(item, i) in message.messages" :key="i" :class="item.from.id === user.id?'myMessage message':'othersMessage message'">
                    <span
                        >De: {{ item.from.name }} para :
                        {{ item.to.name }}</span
                    >
                    <br />
                    <span>{{ item.text }}</span>
                </div>
            </div>
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
        user: {
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
                });
            } catch (error) {
                console.log(error);
            }
        },
    },
};
</script>

<style>
.chat{
    border:1px solid black;
}
.myMessage{
    text-align: left;
    color:green;
}
.othersMessage{
    text-align: end;
    color:red;
}
.message{
    border:1px solid grey;
    border-radius: 15px;
    background-color: aquamarine;
    padding:8px;
}
</style>
