Create DataBase Name chat.
create Table Schemas for users and messages
```mermaid
erDiagram
    USERS {
        int user_id PK "Auto Increment"
        int unique_id
        string fname
        string lname
        string email
        string password
        string img
        string status
    }

    MESSAGES {
        int msg_id PK "Auto Increment"
        int incoming_msg_id FK
        int outgoing_msg_id FK
        string msg
    }

    USERS ||--o{ MESSAGES : "sends/receives"
