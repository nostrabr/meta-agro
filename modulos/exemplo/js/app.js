const socket = new WebSocket("ws://localhost:8090");

// Quando conectar com sucesso
socket.onopen = () => {
    console.log("✅ Conectado ao WebSocket");

    // Enviar uma mensagem de teste para o servidor
    socket.send(JSON.stringify({
        tipo: "notificacao",
        texto: "Olá, servidor WebSocket!"
    }));
};

// Quando receber uma mensagem do servidor
socket.onmessage = (event) => {
    const data = JSON.parse(event.data);
    console.log("📩 Mensagem recebida:", data);

    if (data.tipo === "notificacao") {
        alert("🔔 " + data.texto);
    }
};

// Quando desconectar
socket.onclose = () => {
    console.log("🔌 Conexão WebSocket fechada");
};

// Se der erro
socket.onerror = (error) => {
    console.error("❌ Erro no WebSocket:", error);
};