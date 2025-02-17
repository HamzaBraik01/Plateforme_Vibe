-- Création de la base de données
CREATE DATABASE vibe;

-- Connexion à la base de données
\c vibe;

-- Création de la table "users"
CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    pseudo VARCHAR(50) UNIQUE NOT NULL,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(100) UNIQUE NOT NULL,
    bio TEXT,
    photo_de_profil TEXT,
    mot_de_passe VARCHAR(255) NOT NULL,
    email_verified BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Création de la table "profiles"
CREATE TABLE profiles (
    id SERIAL PRIMARY KEY,
    user_id INT UNIQUE NOT NULL,
    pseudo VARCHAR(50),
    bio TEXT,
    photo_de_profil TEXT,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Création de la table "friends"
CREATE TABLE friends (
    id SERIAL PRIMARY KEY,
    user_id INT NOT NULL,
    friend_id INT NOT NULL,
    status VARCHAR(50) DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (friend_id) REFERENCES users(id) ON DELETE CASCADE,
    UNIQUE (user_id, friend_id)
);

-- Création de la table "notifications"
CREATE TABLE notifications (
    id SERIAL PRIMARY KEY,
    user_id INT NOT NULL,
    message TEXT NOT NULL,
    status VARCHAR(50) DEFAULT 'unread',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Index pour optimiser les recherches
CREATE INDEX idx_users_pseudo ON users(pseudo);
CREATE INDEX idx_users_email ON users(email);
CREATE INDEX idx_friends_user_id ON friends(user_id);
CREATE INDEX idx_notifications_user_id ON notifications(user_id);
