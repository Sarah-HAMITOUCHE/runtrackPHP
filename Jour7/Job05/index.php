<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        td {
            width: 100px;
            height: 100px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #000;
        }
        button {
            width: 80px;
            height: 80px;
            font-size: 24px;
        }
        #message {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Jeu du Morpion</h1>
    <table id="board">
        <tr>
            <td><button onclick="play(0, 0)">-</button></td>
            <td><button onclick="play(0, 1)">-</button></td>
            <td><button onclick="play(0, 2)">-</button></td>
        </tr>
        <tr>
            <td><button onclick="play(1, 0)">-</button></td>
            <td><button onclick="play(1, 1)">-</button></td>
            <td><button onclick="play(1, 2)">-</button></td>
        </tr>
        <tr>
            <td><button onclick="play(2, 0)">-</button></td>
            <td><button onclick="play(2, 1)">-</button></td>
            <td><button onclick="play(2, 2)">-</button></td>
        </tr>
    </table>
    <div id="message"></div>
    <button onclick="resetGame()">Réinitialiser la partie</button>

    <script>
        let currentPlayer = 'X';
        let board = [
            ['', '', ''],
            ['', '', ''],
            ['', '', '']
        ];

        function play(row, col) {
            const button = document.querySelector(`#board tr:nth-child(${row + 1}) td:nth-child(${col + 1}) button`);
            if (button.innerHTML === '-') {
                board[row][col] = currentPlayer;
                button.innerHTML = currentPlayer;
                if (checkWinner()) {
                    document.getElementById('message').innerHTML = `${currentPlayer} a gagné!`;
                    setTimeout(resetGame, 2000);
                } else if (board.flat().every(cell => cell !== '')) {
                    document.getElementById('message').innerHTML = "Match nul!";
                    setTimeout(resetGame, 2000);
                }
                currentPlayer = (currentPlayer === 'X') ? 'O' : 'X';
            }
        }

        function checkWinner() {
            // Vérification des lignes, colonnes et diagonales
            for (let i = 0; i < 3; i++) {
                if (board[i][0] && board[i][0] === board[i][1] && board[i][0] === board[i][2]) {
                    return true;
                }
                if (board[0][i] && board[0][i] === board[1][i] && board[0][i] === board[2][i]) {
                    return true;
                }
            }
            if (board[0][0] && board[0][0] === board[1][1] && board[0][0] === board[2][2]) {
                return true;
            }
            if (board[0][2] && board[0][2] === board[1][1] && board[0][2] === board[2][0]) {
                return true;
            }
            return false;
        }

        function resetGame() {
            board = [
                ['', '', ''],
                ['', '', ''],
                ['', '', '']
            ];
            const buttons = document.querySelectorAll('#board button');
            buttons.forEach(button => button.innerHTML = '-');
            document.getElementById('message').innerHTML = '';
            currentPlayer = 'X';
        }
    </script>
</body>
</html>
