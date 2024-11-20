const memos = document.querySelectorAll('.memo');
memos.forEach(memo => {
    memo.addEventListener('click', async (event) => {
        // メモのデータを取得
        const title = memo.querySelector(".title").textContent;
        const date = memo.querySelector(".date").textContent;
        const text = memo.querySelector(".text").textContent;

        const data = { title, date, text };

        try {
            // 非同期POSTリクエスト
            const response = await fetch('../php/input.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data),
            });

            // 成功したらリダイレクト
            if (response.ok) {
                window.location.href = "../php/input.php";
            } else {
                console.error('データ送信失敗:', response.statusText);
            }
        } catch (error) {
            console.error('エラーが発生しました:', error);
        }
    });
});
