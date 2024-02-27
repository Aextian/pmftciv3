import React, { PropsWithChildren } from "react";

const CardTitle:React.FC<PropsWithChildren> = ({children}) => {
    return (
        <>
            <h5 className="text-xl font-medium text-gray-900 dark:text-white">
                Sign in to our platform
                {children}
            </h5>
        </>
    );
};

export default CardTitle;
