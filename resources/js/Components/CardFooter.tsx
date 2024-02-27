import React, { Children, PropsWithChildren } from "react";

const CardFooter: React.FC<PropsWithChildren> = ({ children }) => {
    return (
        <>
            <div className="text-sm font-medium text-gray-500 dark:text-gray-300">
                {children}
            </div>
        </>
    );
};

export default CardFooter;
