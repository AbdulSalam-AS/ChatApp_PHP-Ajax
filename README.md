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
