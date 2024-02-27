import React, { PropsWithChildren } from "react";

const Card: React.FC<PropsWithChildren> = ({ children }) => {
    return (
        <>
            <div className="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 grid grid-flow-row-[auto_1fr_auto]">
                {children}
            </div>
        </>
    );
};

export default Card;
