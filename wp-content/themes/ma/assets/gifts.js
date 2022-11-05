'use strict';

const main = function () {
    return;
    const sc1TreeBlock = document.querySelector('.sc1__tree-block');
    const goodLuckButton = sc1TreeBlock.querySelectorAll('.sc1__cta-tree-block');
    const triesCountElement = sc1TreeBlock.querySelectorAll('.tries-count');
    const modalCongratulate = document.querySelector('.modal-congratulate');
    const modalCongratulateText = modalCongratulate.querySelector('.modal-txtd span');
    let triesCount = parseInt(triesCountElement[0].textContent);

    const getRandomIntegerNumber = (min, max) => min + Math.floor(Math.random() * (max - min));
    const getRandomItem = (items) => {
        const randomIndex = getRandomIntegerNumber(0, items.length);
        return items[randomIndex];
    };

    if (goodLuckButton && triesCount) {
        const giftsContainer = sc1TreeBlock.querySelector('.gifts');
        const giftsList = giftsContainer.querySelectorAll('.gift .item');
        const giftNumber = [605, 685, 770, 860, 955];
        let indexGift = 0;
        let oldElement = null;
        let countRandom = 1;
        let speedRandom = 10;
        let giftRandomNumber = getRandomItem(giftNumber);

        let randomGifts = function (newRand = null) {
            if (newRand != null) {
                giftRandomNumber = giftNumber[newRand];
                oldElement = null;
                indexGift = 0;
                countRandom = 1;
                speedRandom = 20;
            }
            countRandom++;
            speedRandom += 5 * countRandom;

            if (oldElement === null) {
                oldElement = giftsList[indexGift];
                giftsList[indexGift].classList.add('active');
                indexGift++;
            } else {
                oldElement.classList.remove('active');
                giftsList[indexGift].classList.add('active');
                oldElement = giftsList[indexGift];
                indexGift++;
                if (indexGift === giftsList.length) {
                    indexGift = 0;
                }
            }

            if (speedRandom !== giftRandomNumber) {
                setTimeout(randomGifts, speedRandom)
            } else {
                resetData();
                drawCongratulate(oldElement);
            }
        };
        window.randomGifts = randomGifts;

        const drawCongratulate = function (elementWin) {
            let elementDataText = elementWin.dataset.text;
            modalCongratulateText.textContent = elementDataText;
            modalCongratulate.classList.add('typical-modal-active');
        };

        const resetData = function () {
            countRandom = 1;
            speedRandom = 10;
            giftRandomNumber = getRandomItem(giftNumber);
            goodLuckButton.forEach(function (button) {
                button.classList.remove('drawing');
                button.textContent = 'Испытать удачу';
            });

            goodLuckButton.forEach(function (button) {
                if (triesCount) {
                    button.addEventListener('click', selectGift);
                } else {
                    button.classList.add('disable');
                }
            });
        };

        const selectGift = function (evt) {
            evt.preventDefault();
            goodLuckButton.forEach(function (button) {
                button.removeEventListener('click', selectGift);
                button.classList.add('drawing');
                button.textContent = 'Идет розыгрыш...';
            });
            randomGifts();
            triesCount--;
            triesCountElement.forEach(function (item) {
                item.textContent = triesCount;
            });
        };

        const initButton = function () {
            goodLuckButton.forEach(function (button) {
                button.addEventListener('click', selectGift);
            });
        };

        initButton();
    }
};

main();
